<?php


namespace app\api\controller;


use app\api\model\Group;
use app\api\model\GroupDepartment;

class Member extends Base
{

    public function create_member()
    {

    }

    /**
     * 添加团队
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function create_group(): array
    {
        return (new Group())->createGroup();
    }

    /**
     * 获取团队列表
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function get_group_list(): array
    {
        return (new Group())->getGroupList();
    }

    public function create_department(): array
    {
        return (new GroupDepartment())->createDepartment();
    }
}