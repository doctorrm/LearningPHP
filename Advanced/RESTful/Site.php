<?php
/**
 * 站点实体类
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/18 018
 * Time: 下午 23:01
 */

class Site
{
    private $sites=array(
        1=>"TaoBao",
        2=>"Google",
        3=>"Runoob",
        4=>"Baidu",
        5=>"Weibo",
        6=>"Sina"
    );
    public function getAllSite(){
        return $this->sites;
    }
    public function getSite($id){
        $site=array($id=>($this->sites[$id]) ? $this->sites[$id]:$this->sites[1]);
        return site;
    }

}














