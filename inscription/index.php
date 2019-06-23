<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <html   >     </html>
  <title>inscription</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,100,400,300,600,700,800'>
  

  <link rel="stylesheet" href="assets/css/inscription.css">
  <link rel="stylesheet" href="ContactFrom/css/main.css">

  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
</head>

<body>

  <div class="container coco">
  <div class="panel panel-default">
    <div class="panel-body">

      <div class="stepper">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active">
            <a class="persistant-disabled lala lala1" disabled href="#stepper-step-1" data-toggle="tab" aria-controls="stepper-step-1" role="tab" title="Step 1">
              <span class="round-tab">1</span>
              
            </a>
            <h4 class="cond cond1">Conditions</h4>
            
          </li>
          <li role="presentation" class="disabled">
            <a class="persistant-disabled lala" href="#stepper-step-2" data-toggle="tab" aria-controls="stepper-step-2" role="tab" title="Step 2">
              <span class="round-tab">2</span>
            </a>
            <h4 class="cond">Formulaire</h4>
          </li>
          <li role="presentation" class="disabled">
            <a class="persistant-disabled lala" href="#stepper-step-3" data-toggle="tab" aria-controls="stepper-step-3" role="tab" title="Step 3">
              <span class="round-tab">3</span>
            </a>
            <h4 class="cond">Quiz</h4>
          </li>
          <li role="presentation" class="disabled">
            <a class="persistant-disabled lala" href="#stepper-step-4" data-toggle="tab" aria-controls="stepper-step-4" role="tab" title="Complete">
              <span class="round-tab">4</span>
            </a>
            <h4 class="cond">Bravo</h4>
          </li>
        </ul>
        <div>
          <div class="tab-content">
            <div class="tab-pane fade in active" role="tabpanel" id="stepper-step-1">
              <p>Par données à caractère personnel, SoliCode entend toutes les informations divulguées par les candidats en tant que personnes physiques, quelle que soit leur nature, tels que leurs noms, prénoms, e-mails, ou mot(s) de passe permettant de les identifier.
              </p> <p>
                Les données à caractère personnel que SoliCode est amenée à recueillir sont adressées à l’entité en charge du traitement des dossiers de candidature.
                </p><p>
                Toute donnée à caractère personnel que le candidat est amené à transmettre à SoliCode est traitée de manière confidentielle conformément aux dispositions de la loi n° 09-08 du 18 février 2009 relative à la protection des personnes physiques à l’égard du traitement des données à caractère personnel.
              </p><p>
                Aucune information à caractère personnel concernant le candidat n’est cédée à des tiers ou utilisée à des fins non justifiées ou prévues par la loi. Les Utilisateurs du Site sont tenus de respecter les dispositions de la loi n°09-08. Pour ce faire, ils doivent notamment s’abstenir de toute collecte, captation, déformation ou utilisation des informations auxquelles ils accèdent et, d’une manière générale, de tout acte susceptible de porter atteinte à la vie privée des personnes.
              </p>
             
              <ul class="list-inline btnStep">
                <li>
                  <a class="btn  next-step pull-right contact100-form-btn ">Suivante</a>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" role="tabpanel" id="stepper-step-2">
              <div class=" container row " >
              <form action="inscription/create.php" method="post"  class="contact100-form validate-form form1">
                    <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                      <span class="label-input100">NOM</span>
                      <input class="input100" type="text" id="d1" name="lastname" placeholder="Enter votre nom ">
                      <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                      <span class="label-input100">PRENOM</span>
                      <input class="input100" type="text" id="d2" name="firstname" placeholder="Enter votre nom prénom">
                      <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 rs1-wrap-input100 validate-input"
                      data-validate="Valid email is required: ex@abc.xyz">
                      <span class="label-input100">EMAIL</span>
                      <input class="input100" type="text" id="d3" name="mail" placeholder="Entrer votre email">
                      <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                      <span class="label-input100">CIN</span>
                      <input class="input100" type="text" id="d4" name="cin" placeholder="Enter votre code CIN">
                      <span class="focus-input100"></span>
                      <small id="validation" class="text-danger"></small> 
                    </div>

                    <div class="wrap-input100 rs1-wrap-input100 validate-input"
                      data-validate="Valid email is required: ex@abc.xyz">
                      <span class="label-input100">DATE DE NAISSANCE</span>
                      <input class="input100" type="text" id="d7" name="birth" placeholder="Entrer votre date de naissance">
                      <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input"
                      data-validate="Valid email is required: ex@abc.xyz">
                      <span class="label-input100">TELEPHONE PORTABLE</span>
                      <input class="input100" type="text" id="d5" name="phone" placeholder="Entrer votre téléphone portable">
                      <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input"
                      data-validate="Valid email is required: ex@abc.xyz">
                      <span class="label-input100">VILLE</span>
                      <input class="input100" type="text" id="d8" name="city" placeholder="Entrer votre ville">
                      <span class="focus-input100"></span>
                    </div>
                    <div class="sexe">
                      <label data-v-5d5deb18="" data-v-3bb55783="">Sexe</label>

                  <div class="row">
                  <div class="form-group checkbox" id="homme">
                    <input type="checkbox" id="anId1" value="homme"/>
                    <label for="anId1"><span class="chk-span" id="carreauHomme"></span>Homme</label>
                  </div>
                  <div class="form-group checkbox" id="femme">
                    <input type="checkbox" id="anId2" value="femme"/>
                    <label for="anId2"><span class="chk-span" id="carreauFemme"> </span> Femme</label>
                  </div>
                </div>
              </div>
              <button type="submit"   name="submit"  class="btn btn-primary  pull-right contact100-form-btn ">Suivante</button>
                </form>
                <script>
               $(function(){
                var form = $('.form1');
                form.submit(function(e){
                  $(this).attr("disabled","disabled");
                  e.preventDefault();

                  $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize(),
                    dataType:"json",
                    success: function(data){
                      $('#validation').html(data.content);
                      alert(data.content);
                      if(data.content == 'thank you!!'){
                        $("#nexxt").click();
                        // $("#check").css('display','none');
                        document.getElementById('nexxt').click();
                      }
                      else{
                        
                        $("#check").css('display','block');
                      }
                      // document.getElementById("nexxt").style.display = 'block';
                      // document.getElementById("check").style.display = 'none'; 
                     
                    }
                    
                  });
                });
              });
              
            </script>
              </div>
              <ul class="list-inline btnStep" >
                  <li>
                      <a id="nexxt" class="btn btn-primary next-step pull-right contact100-form-btn "style="display:none">Suivante</a>
                    </li>
                <li>
                  <a class="btn  prev-step contact100-form-btn ">Pécédente</a>
                </li>
               
              </ul>
            </div>
            <div class="tab-pane fade testPassage" role="tabpanel" id="stepper-step-3">
                <div class="covering">
                    <!-- <div class="progress">
                      <div class="progress-bar" style="width: 0;"> <span class="sr-only">60% Complete</span> </div>
                    </div> -->
                    
                    
                    <div class="container-fluid table-class">
                      <div class="black" >
                        <div class="inner cover">
                          <div class="centerUp">
                            <div class="questionaire">
                              <form >
                                <ul class="progress-form">
                                  
                                  <li class="form-group animated fadeInRightBig activate" data-color="#E1523D" data-percentage="20%">
                                      <label for="exampleInputEmail1">Question 1 : .........?</label>
                                      <input type="text" id="q1" class="form-control" required="required" >
                  
                                      <label for="exampleInputEmail1">Question 2 : .........?</label>
                                      <input type="text" id="q2" class="form-control" required="required" >
                  
                                      <label for="exampleInputEmail1">Question 3 : .........?</label>
                                      <input type="text" id="q3" class="form-control" required="required" >
                  
                                      <label for="exampleInputEmail1">Question 4 : .........?</label>
                                      <input type="text" id="q4" class="form-control" required="required" >
                                  </li>
                                  
                                  
                                  <li class="form-group animated hide inactive" data-color="#7C6992"  data-percentage="40%">
                                      <label for="exampleInputEmail1">Question 5 : .........?</label>
                                      <input type="text" id="q5" class="form-control" required="required" >
                  
                                      <label for="exampleInputEmail1">Question 6 : .........?</label>
                                      <input type="text" id="q6" class="form-control" required="required" >
                  
                                      <label for="exampleInputEmail1">Question 7 : .........?</label>
                                      <input type="text" id="q7" class="form-control" required="required" >
                  
                                      <label for="exampleInputEmail1">Question 8 : .........?</label>
                                      <input type="text" id="q8" class="form-control" required="required" >
                                  </li>
                                
                  
                                  <li class="form-group animated hide" data-color="#00AF66"  data-percentage="80%">
                                      <label for="exampleInputEmail1">Question 9 : .........?</label>
                                      <input type="text" id="q9" class="form-control" required="required" >
                  
                                      <label for="exampleInputEmail1">Question 10 : .........?</label>
                                      <input type="text" id="q10" class="form-control" required="required" >
                  
                                      <label for="exampleInputEmail1">Question 11 : .........?</label>
                                      <input type="text" id="q11" class="form-control" required="required" >
                  
                                      <label for="exampleInputEmail1">Question 12 : .........?</label>
                                      <input type="text" id="q12" class="form-control" required="required" >
                                  </li>
                                  <li class="form-group animated hide" data-color="#00AF66"  data-percentage="100%">
                                      <label for="exampleInputEmail1">Question 13 : .........?</label>
                                      <input type="text" id="q13" class="form-control" required="required" >
                  
                                      <label for="exampleInputEmail1">Question 14 : .........?</label>
                                      <input type="text" id="q14" class="form-control" required="required" >
                  
                                      <label for="exampleInputEmail1">Question 15 : .........?</label>
                                      <input type="text" id="q15" class="form-control" required="required" >
                  
                                      <label for="exampleInputEmail1">Question 16 : .........?</label>
                                      <input type="text" id="q16" class="form-control" required="required" >
                                  </li>
                                  <li class="form-group animated hide" data-color="#00AF66"  data-percentage="100%">
                                      <label for="exampleInputEmail1">Question 17 : .........?</label>
                                      <input type="text" id="q17" class="form-control" required="required" >
                  
                                      <label for="exampleInputEmail1">Question 18 : .........?</label>
                                      <input type="text" id="q18" class="form-control" required="required" >
                  
                                      <label for="exampleInputEmail1">Question 19 : .........?</label>
                                      <input type="text" id="q19" class="form-control" required="required" >
                  
                                      <label for="exampleInputEmail1">Question 20 : .........?</label>
                                      <input type="text" id="q20" class="form-control" required="required" >
                                    </li>
                                 
                                  <li class="form-group animated hide " data-color="#00AF66"  data-percentage="100%">
                                        
                                          <ul class="list-inline btnStep ">
                                          
                                              <li>
                                                <label>Trés bien votre test à bien était passer </label>
                                                  <a class="btn  next-step pull-right noteResult contact100-form-btn ">Suivante</a>
                                                </li>
                                             
                                             
                                          </ul>
                                    </li>
                                </ul>
                                
                              </form>
                              
                            
                            </div>
                            <div class="count"><span class="img_cnt"></span> / <span class="img_amt"></span></div>
                            <button  class="btn btn-default btn-lg nxt animated fadeInRightBig contact100-form-btn" >Suivante <span class="icon-next"></span></button>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
            </div>
            <div class="tab-pane fade" role="tabpanel" id="stepper-step-4">
                <h3 id="validation"></h3>
              <p>vous confirmez que vous allez être présent durant tout les deux ans et de 9h jusqu'a 17h</p>

                <form action="inscription/checkingAnswers.php" class="form2" method="POST" id="myFormId">
                  <input class="break answer1 " id="jawab1" name="question1" contenteditable="true">
                  <input class="break answer2 " id="jawab2" name="question2" contenteditable="true">
                  <input class="break answer3 " id="jawab3" name="question3" contenteditable="true">
                  <input class="break answer4 " id="jawab4" name="question4" contenteditable="true">
                  <input class="break answer5 " id="jawab5" name="question5" contenteditable="true">
                  <input class="break answer6 " id="jawab6" name="question6" contenteditable="true">
                  <input class="break answer7 " id="jawab7" name="question7" contenteditable="true">
                  <input class="break answer8 " id="jawab8" name="question8" contenteditable="true">
                  <input class="break answer9 " id="jawab9" name="question9" contenteditable="true">
                  <input class="break answer10 " id="jawab10" name="question10" contenteditable="true">
                  <input class="break answer11 " id="jawab11" name="question11" contenteditable="true">
                  <input class="break answer12 " id="jawab12" name="question12" contenteditable="true">
                  <input class="break answer13 " id="jawab13" name="question13" contenteditable="true">
                  <input class="break answer14 " id="jawab14" name="question14" contenteditable="true">
                  <input class="break answer15 " id="jawab15" name="question15" contenteditable="true">
                  <input class="break answer16 " id="jawab16" name="question16" contenteditable="true">
                  <input class="break answer17 " id="jawab17" name="question17" contenteditable="true">
                  <input class="break answer18 " id="jawab18" name="question18" contenteditable="true">
                  <input class="break answer19 " id="jawab19" name="question19" contenteditable="true">
                  <input class="break answer20 " id="jawab20" name="question20" contenteditable="true">
                 
                  <input class="break donne1 "  id="donne1" name="nom" contenteditable="true">
                  <input class="break donne2 " id="donne2" name="prenom" contenteditable="true">
                  <input class="break donne3 " id="donne3" name="email" contenteditable="true">
                  <input class="break donne4 " id="donne4" name="CIN" contenteditable="true">
                  <input class="break donne9 " id="donne9" name="pass" contenteditable="true">
                  <input class="break donne5 " id="donne5" name="dateNaissance" contenteditable="true">
                  <input class="break donne6 " id="donne6" name="ville" contenteditable="true">
                  <input class="break donne7 " id="donne7" name="sexe" contenteditable="true">
                  <input class="break note " id="note" name="note" contenteditable="true">

                  <input type="submit" class="btn btn-default btn-lg hide submit" name ="sub"  value="Ready to Send"/>
                  
                </form> 
                <script>
              
              $(".form2").submit(function(e){
              e.preventDefault();
              $.post(
                'inscription/checkingAnswers.php',
                {
                  question1:$('#jawab1').val(),
                  question2:$('#jawab2').val(),
                  question3:$('#jawab3').val(),
                  question4:$('#jawab4').val(),
                  question5:$('#jawab5').val(),
                  question6:$('#jawab6').val(),
                  question7:$('#jawab7').val(),
                  question8:$('#jawab8').val(),
                  question9:$('#jawab9').val(),
                  question10:$('#jawab10').val(),
                  question11:$('#jawab11').val(),
                  question12:$('#jawab12').val(),
                  question13:$('#jawab13').val(),
                  question14:$('#jawab14').val(),
                  question15:$('#jawab15').val(),
                  question16:$('#jawab16').val(),
                  question17:$('#jawab17').val(),
                  question18:$('#jawab18').val(),
                  question19:$('#jawab19').val(),
                  question20:$('#jawab20').val()
                }
              );
            });
          </script>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

  

    <script  src="assets/js/inscription.js"></script>


</body>

</html>
