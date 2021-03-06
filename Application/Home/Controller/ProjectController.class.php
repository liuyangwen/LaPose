<?php
namespace Home\Controller;
use Think\Controller;
class ProjectController extends Controller {
  public function index(){
    $this->redirect('Systemload/systemload',array(),2,'请先登录，页面跳转中~');//跳转到Systemload中的systemload方法
    }
    
    public function project($project_name){
      header("Content-Type: text/html;charset=utf-8"); 

         $Tb_project_info = D('Tb_project_info');    
        $project_detailinfo=$Tb_project_info ->where ("project_name ='$project_name'") ->find();
        $this->assign('project_name',$project_detailinfo["project_name"]);
        $this->assign('official_link',$project_detailinfo["official_link"]);
        $this->assign('company_name',$project_detailinfo["company_name"]);
        $this->assign('registration_time',$project_detailinfo["registration_time"]);
        $this->assign('location',$project_detailinfo["location"]);
        $this->assign('project_status',$project_detailinfo["project_status"]);
        $this->assign('project_stage',$project_detailinfo["project_stage"]);
        $this->assign('area',$project_detailinfo["area"]);
        $this->assign('sub_area',$project_detailinfo["sub_area"]);
        $this->assign('intro',$project_detailinfo["intro"]);
        $this->assign('registration_amount',$project_detailinfo["registration_amount"]);

        

       $this -> display('./Application/Home/View/Project/project.php');
    }

    public function project_manager($manager_name){
       header("Content-Type: text/html;charset=utf-8"); 

       $Tb_project_manager = D('Tb_project_manager');    
        $manager_info=$Tb_project_manager ->where ("manager_name ='$manager_name'") ->find();

        $this->assign('manager_name',$manager_info["manager_name"]);
        $this->assign('manager_position',$manager_info["manager_position"]);
        $this->assign('weibo',$manager_info["weibo"]);
        $this->assign('location',$manager_info["location"]);
        $this->assign('intro',$manager_info["intro"]);

       $this -> display('./Application/Home/View/Manager/manager.php');
    

    }

}