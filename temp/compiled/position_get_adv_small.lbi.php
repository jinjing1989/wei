<div class="hd">
      <ul>
      {foreach from=$ad_child item=child}
        <li></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
      </ul>
    </div>
    <div class="bd">
     <ul>
		{foreach from=$ad_child item=child}
            <li><a href="<?php echo $this->_var['child']['ad_link']; ?>" target="_blank"><img src="data/afficheimg/<?php echo $this->_var['child']['ad_code']; ?>" alt="" class="goodsimg" /></a></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                             	
    </ul>
    </div>
  </div>
