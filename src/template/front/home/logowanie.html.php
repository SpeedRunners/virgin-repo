
<?php $this->getHeader() ?>

<div id="wrapper">

       <?php $this->getMenu() ?>
        
        <!-- Page Content -->
    <div id="page-content-wrapper">
         
             <?php $this->getInfo_top() ?>
           
         <div class="container-fluid">
            <div class="content">  
                <form action="<?php echo HTTP_SERVER?>" method="post" >
                    <input type="text" name="a"/>
                    <input type="text" name="b"/>
                    <input type='submit'/>
                    
                </form>           
            </div>
        </div>
    </div>
</div>

<?php $this->getFooter() ?>