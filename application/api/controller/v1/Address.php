<?php
namespace app\api\controller\v1;

use app\api\model\User as UserModel;
use app\api\service\Token as TokenService;
use app\api\validate\AddressNew;
use app\lib\exception\UserException;
use app\lib\exception\SuccessMessage;

class Address extends BaseController
{
    protected $beforeActionList = [
        'checkPrimaryScope' => ['only' => 'createOrUpdateAddress']
    ];

    /**
     * 更新或者创建用户收获地址
     */
    public function createOrUpdateAddress()
    {
        $validate = new AddressNew();
        $validate->goCheck();

        $uid = TokenService::getCurrentUid();
        $user = UserModel::get($uid);
        if (!$user) {
            throw new UserException();
        }
        $userAddress = $user->address;
        // 根据规则取字段是很有必要的，防止恶意更新非客户端字段
        $data = $validate->getDataByRule(input('post.'));
        if (!$userAddress) {
            // 关联属性不存在，则新建
            $user->address()
                ->save($data);
        } else {
            // 存在则更新
//            fromArrayToModel($user->address, $data);
            // 新增的save方法和更新的save方法并不一样
            // 新增的save来自于关联关系
            // 更新的save来自于模型
            $user->address->save($data);
        }
        return json(new SuccessMessage(), 201);
    }

}