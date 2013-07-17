<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo $this->_var['site_url']; ?>/" />

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7 charset=<?php echo $this->_var['charset']; ?>" />
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $this->_var['charset']; ?>" />
<?php echo $this->_var['page_seo']; ?>

<meta name="author" content="ecmall.shopex.cn" />
<meta name="copyright" content="ShopEx Inc. All Rights Reserved" />
<link href="<?php echo $this->res_base . "/" . 'shop.css'; ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="index.php?act=jslang"></script>
<script type="text/javascript" src="<?php echo $this->lib_base . "/" . 'jquery.js'; ?>" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo $this->lib_base . "/" . 'ecmall.js'; ?>" charset="utf-8"></script>

<script type="text/javascript">
//<!CDATA[
var SITE_URL = "<?php echo $this->_var['site_url']; ?>";
var REAL_SITE_URL = "<?php echo $this->_var['real_site_url']; ?>";
var PRICE_FORMAT = '<?php echo $this->_var['price_format']; ?>';

$(function(){
    var span = $("#child_nav");
    span.hover(function(){
        $("#float_layer:not(:animated)").show();
    }, function(){
        $("#float_layer").hide();
    });
});
//]]>
</script>
<?php echo $this->_var['_head_tags']; ?>
</head>

<body>

<div id="head">
    <h1 title="<?php echo htmlspecialchars($this->_var['site_title']); ?>"><a href="index.php"><img src="<?php echo $this->_var['site_logo']; ?>" alt="ECMall" /></a></h1>

    <div id="subnav">
        <p>
        ����,<?php echo htmlspecialchars($this->_var['visitor']['user_name']); ?>
        <?php if (! $this->_var['visitor']['user_id']): ?>
        [<a href="<?php echo url('app=member&act=login&ret_url=' . $this->_var['ret_url']. ''); ?>">��¼</a>]
        [<a href="<?php echo url('app=member&act=register&ret_url=' . $this->_var['ret_url']. ''); ?>">ע��</a>]
        <?php else: ?>
        [<a href="<?php echo url('act=logout'); ?>">�˳�</a>]
        <?php endif; ?>
        </p>
        <p>
        <a class="shopping" href="<?php echo url('app=cart'); ?>">���ﳵ</a> <span>|</span>
        <a class="favorite" href="<?php echo url('app=my_favorite'); ?>">�ղؼ�</a> <span>|</span>
        <a class="note" href="<?php echo url('app=message&act=newpm'); ?>">վ����Ϣ<?php if ($this->_var['new_message']): ?>(<?php echo $this->_var['new_message']; ?>)<?php endif; ?></a> <span>|</span>
        <a class="help" href="<?php echo url('app=article&code=help'); ?>">��������</a>
        <?php $_from = $this->_var['navs']['header']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');if (count($_from)):
    foreach ($_from AS $this->_var['nav']):
?>
        <span>|</span> <a class="user_defined" href="<?php echo $this->_var['nav']['link']; ?>"<?php if ($this->_var['nav']['open_new']): ?> target="_blank"<?php endif; ?>><?php echo htmlspecialchars($this->_var['nav']['title']); ?></a>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </p>
    </div>

    <div id="topbtn">
        <div class="topbtn1"></div>
        <div class="topbtn2"></div>
        <span id="child_nav">
            <a href="<?php echo url('app=member'); ?>" class="user">�û�����</a>
            <ul id="float_layer">
                <div id="adorn1"></div>
                <div id="adorn2"></div>
                <?php if ($this->_var['visitor']['store_id']): ?>
                <li><a href="<?php echo url('app=my_goods'); ?>">��Ʒ����</a></li>
                <li><a href="<?php echo url('app=seller_order'); ?>">��������</a></li>
                <li><a href="<?php echo url('app=my_qa'); ?>">��ѯ����</a></li>
                <?php else: ?>
                <li><a href="<?php echo url('app=buyer_order'); ?>">�ҵĶ���</a></li>
                <li><a href="<?php echo url('app=buyer_groupbuy'); ?>">�ҵ��Ź�</a></li>
                <li><a href="<?php echo url('app=my_question'); ?>">�ҵ���ѯ</a></li>
                <?php endif; ?>
            </ul>
        </span>
        <span>|</span>
        <a href="<?php echo url('app=category'); ?>">��Ҫ��</a> <span>|</span>
        <a href="<?php echo url('app=my_goods&act=add'); ?>">��Ҫ��</a>
    </div>

    <div id="path">
        ��ǰλ��:
        <?php $_from = $this->_var['_curlocal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'lnk');if (count($_from)):
    foreach ($_from AS $this->_var['lnk']):
?>
        <?php if ($this->_var['lnk']['url']): ?>
        <a href="<?php echo $this->_var['lnk']['url']; ?>"><?php echo htmlspecialchars($this->_var['lnk']['text']); ?></a> <span>&#8250;</span>
        <?php else: ?>
        <?php echo htmlspecialchars($this->_var['lnk']['text']); ?>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>

    <div id="search">
        <form id="" name="" method="get" action="index.php">
            <div class="input">
                <div class="input1"></div>
                <div class="input2"></div>
                <select name="act" class="select1">
                <option value="index">������Ʒ</option>
                <option value="store">��������</option>
                <option value="groupbuy">�����Ź�</option>
                </select>
                <input type="hidden" name="app" value="search" />
                <input type="text" class="search334" name="keyword" />
            </div>
            <input class="search_btn" type="submit" value="" />
        </form>
    </div>
</div>