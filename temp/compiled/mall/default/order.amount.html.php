                <script type="text/javascript">
                $(function(){
                   $('#check_coupon').click(function(){
                       var coupon_sn = $('#coupon_sn').val();
                       if(coupon_sn == '')
                       {
                           return;
                       }
                       $.getJSON("index.php?app=order&act=check_coupon", {coupon_sn: coupon_sn, store_id: '<?php echo $_GET['store_id']; ?>'}, function(data){
                           if(data['retval'])
                           {
                               $('.unusable').hide();
                               var msg = '��Ч ���Ż�ȯ���Żݼ۸�Ϊ';
                               var str = price_format(data['retval']['price']);
                               $('.usable').show().html(msg + str).css("display","block");
                           }
                           else
                           {
                               $('.usable').hide();
                               $('.unusable').show().css("display","block");
                               $('#coupon_sn').val('');
                           }
                       });
                   });
               });
                </script>
                <div class="make_sure">
                    <p>�����ܼ�:&nbsp;<strong class="fontsize3" id="order_amount"><?php echo price_format($this->_var['goods_info']['amount']); ?></strong><?php if ($this->_var['goods_info']['allow_coupon']): ?>&nbsp;&nbsp;<input type="button" class="btn1" onclick="$(this).parent('p').next().toggle();$('#coupon_sn').val('');" /><?php endif; ?></p>
                    <?php if ($this->_var['goods_info']['allow_coupon']): ?>
                    <p style="display:none;">�Ż�ȯ���:&nbsp;
                    <input type="text" name="coupon_sn" id="coupon_sn" class="text" />  
                    <input type="button" value="���" class="check" id="check_coupon" />
                    <span class="usable">��Ч ���Ż�ȯ���Żݼ۸�Ϊ</span> <span class="unusable">��Ч���Ż�ȯ.�����Ե� <a href='index.php?app=my_coupon'>�ҵ��Ż�ȯ</a> �Ǽǻ��߲�ѯ������Ż�ȯ��Ϣ</span>
                    </p>
                    <?php endif; ?>
                    <p>
                        <a href="javascript:void($('#order_form').submit());" class="btn">�µ���ɲ�֧��</a>
                        <a href="<?php echo url('app=cart&store_id=' . $this->_var['goods_info']['store_id']. ''); ?>" class="back">���ع��ﳵ</a>
                    </p>
                </div>
