<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css">
  </head>

<body>
<?php
#$user = (!Yii::app()->user->isGuest) ? User::model()->findByPk(Yii::app()->user->id) : "";
#$name = $user!="" ? $user->profile->firstname : "";
/*  $this->widget('bootstrap.widgets.TbNavbar', array(
    'brand' => 'Imperium',
    #'brandUrl'=>array('/otform/index'),
    'fixed'=>'',
    'items' => array(
      array(
        'class' => 'bootstrap.widgets.TbMenu',
        'items' => array(
          array('label'=>'Schedule','icon'=>'book','url'=>array('/schedule'),'visible'=>!Yii::app()->user->isGuest,'active'=>false),
          array('label'=>'Manpower','icon'=>'group','url'=>array('/employeeSchedule/manpower'),'visible'=>!Yii::app()->user->isGuest,'active'=>false),
          array('label'=>'Employee Schedule','icon'=>'list','url'=>array('/employeeSchedule/viewsched'),'visible'=>!Yii::app()->user->isGuest,'active'=>false),
/*
                array('label'=>Yii::t('app','Home'), 'url'=>array('/site/index')),
                array('label'=>Yii::t('app','About'), 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>Yii::t('app','Contact'), 'url'=>array('/site/contact')),
                array('label'=>Yii::t('app','Login'), 'url'=>array('/user/login'),'visible'=>Yii::app()->user->isGuest),
                array('label'=>Yii::t('app','Rights'), 'url'=>array('/rights')),
                array('label'=>Yii::t('app','Logout').' ('.Yii::app()->user->name.')', 'url'=>array('/user/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ,
*/
  #        array('label'=>'O.T. Dashboard','icon'=>'briefcase', 'url'=>array('/otform/index'), 'visible'=>!Yii::app()->user->isGuest,'active'=>false),
  #        array('label'=>'Leave Dashboard','icon'=>'book', 'url'=>array('/leave/index'), 'visible'=>!Yii::app()->user->isGuest,'active'=>false),
 /*       )
      ),
      array(
        'class' => 'bootstrap.widgets.TbMenu',
        'htmlOptions' => array('class' => 'pull-right'),
        'encodeLabel'=>false,
        'items' => array(
          '...',
        #  array('label'=>'Logged in as'.' '.'<b>'.$name.'</b>','icon'=>'user','url'=>array('/user/profile'),'visible'=>!Yii::app()->user->isGuest,'active'=>false),
        #  array('label'=>Yii::t('app','Rights'), 'url'=>array('/rights'),'visible'=>Yii::app()->user->checkAccess('Admin')),
          array('label'=>Yii::t('app','Rights'), 'url'=>array('/rights'),'visible'=>Yii::app()->user->checkAccess('Admin')),
          array('label'=>'','icon'=>'off','url'=>array('/site/logout'),'visible'=>!Yii::app()->user->isGuest,'active'=>false),
          array('label'=>'Login','icon'=>'off','url'=>array('/user/login'),'visible'=>Yii::app()->user->isGuest,'active'=>false),
        )
      ),
   )
 ));
*/
$this->widget(
	'bootstrap.widgets.TbNavbar',
	array(
		'type' => 'inverse',
		'brand' => 'TEMPLATE',
		'fixed' => false,
		'items' => array(
			array(
				'class' => 'bootstrap.widgets.TbMenu',
				'items' => array(
					array('label'=>'Sample','icon'=>'file','url'=>array('index'),'visible'=>!Yii::app()->user->isGuest,'active'=>false),
					array('label'=>'Gii','icon'=>'file','url'=>array('/gii'),'visible'=>!Yii::app()->user->isGuest,'active'=>false),
					array(
					'label' => 'Sample List',
					'icon' => 'list',
					'items' => array(
						#array('label' => 'View All Schedule', 'url' => array('/employeeSchedule/viewsched','startDate'=>null,'endDate'=>null)),
						array('label' => 'Create New', 'url' => array('index')),
					),
					'visible'=>!Yii::app()->user->isGuest,'active'=>false,
					),
					array('label'=>'User Management','icon'=>'file','url'=>array('/user'),'visible'=>!Yii::app()->user->isGuest,'active'=>false),
		
				)
			),
			array(
				'class' => 'bootstrap.widgets.TbMenu',
				'htmlOptions' => array('class' => 'pull-right'),
				'encodeLabel'=>false,
				'items' => array(
				'...',
						array('label'=>Yii::t('app','Rights'), 'url'=>array('/rights'),'visible'=>Yii::app()->user->checkAccess('Admin')),
						array('label'=>'','icon'=>'off','url'=>array('/site/logout'),'visible'=>!Yii::app()->user->isGuest,'active'=>false),
						array('label'=>'Login','icon'=>'off','url'=>array('/user/login'),'visible'=>Yii::app()->user->isGuest,'active'=>false),
				)
			),
		)
	)
);
?>
<div class="container-fluid" id="page">
  <center>
<?php
  $msgType='';
  if(Yii::app()->user->hasFlash("success"))
   $msgType='success';
  if(Yii::app()->user->hasFlash("error"))
   $msgType='error';
  if(Yii::app()->user->hasFlash("info"))
   $msgType='info';
  $this->widget('bootstrap.widgets.TbAlert', array(
    'block'=>true, // display a larger alert block?
    'fade'=>true, // use transitions?
    'closeText'=>'x', // close link text - if set to false, no close link is displayed
    'alerts'=>array( // configurations per alert type
            $msgType=>array('block'=>true, 'fade'=>true, 'closeText'=>'x'), // success, info, warning, error or danger
    ),
  ));
?>
  </center>
        <?php echo $content; ?>

</div><!-- page -->

</body>
</html>
