<?php
  
  /**
   *
   * Show a Card on the main view
   *
   * @param    string  $imagePath path of the image to show
   * @param    string  $title Title of the card
   * @param    string  $text description of the card
   * @param    string  $subtext secondary text 
   * @param    string  $layout "left" or "right"
   * 
   * @return   HTML of the card
   *
   */
  function show_card($imagePath,$title,$text,$subtext,$layout="left"){?>
    <div class="card mb-3" style="max-width: 1080px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="<?php echo $imagePath?>" class="container rounded mx-auto d-block" >
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?php echo $title?></h5>
            <p class="card-text"><?php echo $text?></p>
            <p class="card-text text-body-secondary"><?php echo $subtext?></p>
          </div>
        </div>
      </div>
    </div>    <?php
  }


  /**
   *
   * Show the skills table
   * @return   HTML of the table
   *
   */
  function show_skill_table($skills,$title){    
    ?>
      <table class="table table-light table-bordered">
        <thead class="table-primary">
          <th colspan="100%"><?php echo $title?></th>
        </thead>
        <thead class="table-primary">
          <th><br></th>
          <th>Skill</th>
          <th>Level</th>
          <!-- <th>Notes</th> -->
        </thead>
        <tbody>
          <?php foreach ($skills as $skill){?>
            <tr>
              <td><img class="rounded mx-auto d-block" height="20" src="img/skills/<?php echo $skill[1]?>"></td>
              <td><?php echo $skill[0]?></td>
              <td >
                <div style="display:flex;justify-content: flex-start;">
                  <?php for ($i=1;$i<=$skill[2];$i++){?>
                    <img class="rounded " height="15" src="img/star.png">
                  <?php }?>
                </div>
              </td>
              <!-- <td><?php echo $skill[3]?></td> -->
            </tr>
          <?php }?>
        </tbody>
      </table>
    <?php
  }

  /**
   *
   * Show a Card on the social view
   *
   * @param    array  $socials details of the social
   * 
   * @return   HTML of the cards
   *
   */
  function show_cards_social($socials){
    foreach($socials as $social){?>
    <div class="card mb-3" style="max-width: 1080px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="img/social/<?php echo $social[1]?>" height="90" class="rounded mx-auto d-block" >
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?php echo $social[0]?></h5>
            <p class="card-text"><a target="_blank" href="<?php echo $social[4]?>"><?php echo $social[2]?></a></p>
            <p class="card-text text-body-secondary"><?php echo $social[3]?></p>
          </div>
        </div>
      </div>
    </div>    
    <?php
    }
  }

?>