
<?php $this->getHeader() ?>

<div id="wrapper" class="toggled">

       <?php $this->getMenu() ?>
        
        <!-- Page Content -->
    <div id="page-content-wrapper">
         
             <?php $this->getInfo_top() ?>  
                        
               <div class="screen_center logowanie">
               
                <form action="<?php echo HTTP_SERVER."log" ?>" method="post" >
                    <input placeholder="Login" type="text" name="login"/>
                    <input placeholder="Hasło" type="password" name="password"/>
                    <input value="Zaloguj się" class="btn btn-success" type='submit'/>
                    
                </form>           
                </div>
           
      
    </div>
</div>

<?php $this->getFooter() ?>