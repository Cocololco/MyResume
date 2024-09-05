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
  

  function show_entry_timeline($entries){?>
    <div class="list-group gap-3 py-3 list-group-horizontal w-100">
      <div class="list-group col-4">
        <?php
        foreach($entries as $entry){
          ?>
          <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            <div class="d-flex gap-2 w-100 justify-content-between"
            data-bs-toggle="collapse" 
              data-bs-target="#collapse<?php echo $entry['id']?>" 
              aria-expanded="true" 
              aria-controls="collapse"
            >
              <div style="width:50%">
                <img src="img/<?php echo $entry['image']?>" alt="twbs" height="25" class="rounded flex-shrink-0">
                <h6 class="mb-0"><?php echo $entry['title']?></h6>
                <small class="opacity-50 text-nowrap"><?php echo $entry['location']?></small>
              </div>
              <div >
                <p class="mb-0 opacity-75"><?php echo $entry['content']?></p>
                <div class="d-flex gap-2 justify-content-center">
                  <small class="opacity-50 text-nowrap"><?php echo $entry['date-start']?></small>
                  <small class="opacity-50 text-nowrap"><?php echo $entry['date-end']?></small>
                </div>
              </div>
            </div>
          </a>  
          <?php
        }?>
      </div>
      <div class="list-group col-8">
        <div class="accordion" id="accordionExample">
        <?php foreach($entries as $entry){?>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?php echo $entry['id']?>">
              <button class="accordion-button 
              <?php if(empty($entry['active'])){echo "collapsed";}?>
              " 
              type="button" 
              data-bs-toggle="collapse" 
              data-bs-target="#collapse<?php echo $entry['id']?>" 
              aria-expanded="true" 
              aria-controls="collapse<?php echo $entry['id']?>" ">
                <span><?php echo $entry['company']?> - <?php echo $entry['title']?></span>
              </button>
            </h2>
            <div id="collapse<?php echo $entry['id']?>" 
            class="accordion-collapse collapse <?php if(!empty($entry['active'])){echo "show";}?>" 
            aria-labelledby="heading<?php echo $entry['id']?>" 
            data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong><?php echo $entry['title']?></strong><br>
                <span class="opacity-50 text-nowrap" style=""><?php echo $entry['date-start']?>-<?php echo $entry['date-end']?></span><br>
                <?php foreach($entry['details'] as $detail){?>
                  <li><?php echo $detail?></li>
                <?php }?>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
    
    <?php
  }

  function show_details_timeline($entries){?>
    
      <?php
      foreach($entries as $entry){
        ?>
        <div id="<?php echo $entry['id']?>" class="border rounded">
          <?php echo $entry['id']?>
        </div>  
        <?php
      }?>
    <?php
  }

?>