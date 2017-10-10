<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    //
    protected $table = 'user';

    public function read(){
        return $this->all();
    }

    public function getInfoById($id){
        //原生sql查询
        return DB::select('select * from t_user where id = ? and username= ? ',[$id,'test']);
    }
    //返回 true 或false
    public function addUser($data){
        //原生sql 插入数据
        return DB::insert('insert into t_user (id,username,phone) values (?,?,?)',[$data['id'],$data['username'],$data['phone']]);
    }
    //返回影响的行数
    public function updateInfo($param,$data){
        //原生sql 更新数据
        return DB::update('update t_user set phone=? where phone = ?' ,[$data['phone'],$param['phone']]);
    }
    //
    public function dbOptions(){
        //开始事务
        DB::beginTransaction();
        //事务回滚
        DB::rollBack();
        //事务提交
        DB::commit();
    }
}
