<<<<<<< HEAD
<?php 
    session_start();
    
?>

<section class="col-md-6 offset-md-3 mt-5 mb-5 rounded border border-primary justify-content-center align-item-center container-fluid bg-light">
    <form action="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Admin/login" method="POST" class =" mt-4">
                <input type="text" name="login" placeholder="Login">
                    <input type="password" name="password" placeholder="Password">
                <input type="submit" value="Envoyer" name="sendLogin" class="btn btn-info">
                <a href="#" alt="inscription">Inscription</a>
    </form>
    <article class="row">
        <div class="col-md-12 ">
        <h1 class="text-center text-info p-4"><svg width="1em" class="ml-1" height="1em" viewBox="0 0 19 13" class="bi bi-calculator" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
  <path d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z"/>
    </svg> COGIP Accounting Software<svg width="1em" height="1em" class="ml-3" viewBox="0 0 19 13" class="bi bi-calculator" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
  <path d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z"/>
</svg></h1>

        <h3 class="text-center p-1">Hello dear !</h3>
            <table class="table">
                <thead>
                <h2 class="text-center text-info pt-3">Last invoices </h2>
                    <tr class=" text-primary">
                        <th>#</th>
                        <th>Invoice number</th>
                        <th>Dates</th>
                        <th>Company</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php
                        require_once(ROOT.'controllers/Home.php');
                        foreach($contentInv as $content){
                            echo '<tr class="">';
                            echo '<th ><a href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Invoice/ShowInvoice/'.$content['ID_Invoice'].'" >'.$content['ID_Invoice'].'</th></a>';
                            echo '<th >'.$content['Number_Invoice'].'</th>';
                            echo '<th >'.$content['Date_Invoice'].'</th>';
                            echo '<th >'.$content['Name'].'</th>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </article>
</section>

<section class="col-md-6 offset-md-3  text-center mt-5 rounded border border-primary container-fluid bg-light">
    <!-- <div class="row"> -->
        <!-- <div class="col-md-12 d-flex flex-wrap"> -->
            <table class="table table-sm-responsive">
                <thead>
                    <h2 class="text-center text-info pt-3">Last contacts </h2>
                    <tr class=" text-primary">
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>e-mail</th>
                        <th>Company</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    foreach($contentCont as $content){
                        echo '<tr>';
                        echo '<th><a href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Contacts/showContact/'.$content["ID_Contact"].'">'.$content['ID_Contact'].'</th></a>';
                        echo '<th>'.$content['Firstname']. ' '.$content['Lastname']. '</th>';
                        echo '<th>'.$content['Phone']. '</th>';
                        echo '<th>'.$content['Email']. '</th>';
                        echo '<th>'.$content['Name'].'</th>';
                        echo '</tr>';
                        // REMPLACER HREF PAR ROOT 

                    }?>
                </tbody>
            </table>
        <!-- </div> -->
    <!-- </div> -->
</section>
<section class="col-md-6 offset-md-3 mt-5 text-center rounded border border-primary  mb-5 container-fluid  bg-light">
    <table class="table table-sm-responsive">
        <thead>
            <h2 class="text-center text-info pt-3">Last companies </h2>
                <tr class=" text-primary">
=======

<section class="col-md-6 offset-md-3 mt-5 mb-5 rounded border">
<h2 class="text-center text-info">Welcome to the COGIP</h2>

<p class="text-left">Bonjour !</p>
<table class="table ">
            <thead>
            <h3>Last invoices :</h3>
                <tr>
                    <th>#</th>
                    <th>Invoice number</th>
                    <th>Dates</th>
                    <th>Company</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once(ROOT.'controllers/Home.php');
                    
                    // var_dump($contentInv);

                    foreach($contentInv as $content){
                    echo '<tr>';
                    echo '<th ><a href="" >'.$content['ID_Invoice'].'</th></a>';
                    echo '<th >'.$content['Number_Invoice'].'</th>';
                    echo '<th >'.$content['Date_Invoice'].'</th>';
                    echo '<th >'.$content['ID_Company'].'</th>';
                    echo '</tr>';
                }
                     ?>
            </tbody>
                </table>
</section>
<section class="col-md-6 offset-md-3 mt-5 rounded border">
    <table class="table">
        <thead>
            <h3>Last contacts :</h3>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>e-mail</th>
                    <th>Company</th>
                </tr>
            </thead>
        <tbody>
            <?php
                foreach($contentCont as $content){
                    echo '<tr>';
                    echo '<th><a href="">'.$content['ID_Contact'].'</th></a>';
                    echo '<th>'.$content['Firstname']. ' '.$content['Lastname']. '</th>';
                    echo '<th>'.$content['Phone']. '</th>';
                    echo '<th>'.$content['Email']. '</th>';
                    echo '<th>'.$content['ID_Company'].'</th>';
                    echo '</tr>';
                }?>
                </tbody>
                </table>
</section>
<section class="col-md-6 offset-md-3 mt-5 rounded border mb-5">
    <table class="table">
        <thead>
            <h3>Last companies :</h3>
                <tr>
>>>>>>> master
                    <th>#</th>
                    <th>Name</th>
                    <th>TVA</th>
                    <th>Country</th>
                    <th>Type</th>
                </tr>
            </thead>
        <tbody>
            <?php
                foreach($contentComp as $content){
                    echo '<tr>';
<<<<<<< HEAD
                    echo '<th><a href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Companies/showCompany/'.$content['ID_Company'].'">'.$content['ID_Company'].'</th></a>';
                    echo '<th>'.$content['Name'].  '</th>';
                    echo '<th>'.$content['Country']. '</th>';// REMPLACER HREF PAR ROOT 
                    echo '<th>'.$content['VAT']. '</th>';
                    echo '<th>'.$content['Type_Company'].'</th>';
=======
                    echo '<th><a href="">'.$content['ID_Company'].'</th></a>';
                    echo '<th>'.$content['Name'].  '</th>';
                    echo '<th>'.$content['Country']. '</th>';
                    echo '<th>'.$content['VAT']. '</th>';
                    echo '<th>'.$content['ID_Type'].'</th>';
>>>>>>> master
                    echo '</tr>';
                }?>
                </tbody>
                </table>
</section>