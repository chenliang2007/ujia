<?php echo $this->fetch('header.html'); ?>
<?php echo $this->fetch('curlocal.html'); ?>
<div class="flow_chart">
    <div class="pos_x1 bg_a2" title="ѡ����Ʒ"></div>
    <div class="pos_x2 bg_b1" title="��ɶ�����Ϣ���µ�"></div>
    <div class="pos_x3 bg_c2" title="�µ���ɲ�֧��"></div>
</div>
<form method="post" id="order_form">
<div class="content">
    <div class="module_common">
        <div class="step_main">
            <div class="main_add">
                <?php echo $this->fetch('order.shipping.html'); ?>
                <?php echo $this->fetch('order.postscript.html'); ?>
                <?php echo $this->fetch('order.amount.html'); ?>
            </div>
            <div class="sidelist">
                <?php echo $this->fetch('order.goods.html'); ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
</form>
<?php echo $this->fetch('footer.html'); ?>