<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} 
$score = "";
$scoreSum = get_field('review_summary');
$scoreFinal = get_field('review_final_score');?>
<div class="review-scores">
  <?php for($i = 0; $i < 4; $i++):
    switch($i){
      case 0:
        $score = get_field('review_score_one');
        break;
      case 1:
        $score = get_field('review_score_two');
        break;
      case 2:
        $score = get_field('review_score_three');
        break;
      default:
        $score = get_field('review_score_four');
        break;
    }?>
      <div class="first-score row no-margin align-middle justfy-align">
        <div class="small-11 column no-padding">
          <div class="progress" role="progressbar" tabindex="0" aria-valuenow="<?php echo $score * 10;?>" aria-valuemin="0" aria-valuetext="<?php echo $score * 10;?> percent" aria-valuemax="100">
            <div class="progress-meter secondary-background" style="max-width: <?php echo $score * 10;?>%;"></div>
          </div>
        </div>
        <div class="small-1 column">
          <h4 class="review-score secondary-colour"><?php echo $score;?></h4>
        </div>
      </div>
  <?php endfor;?>
  <div class="final-score secondary-background white-colour row no-margin align-middle justify-align">
    <div class="column small-10">
      <h2>Final Verdict</h2>
      <p><?php echo $scoreSum;?></p>
    </div>
    
    <div class="column small-2 final-review-score fa-3x text-center" data-final-score="<?php echo $scoreFinal;?>"></div>
  </div>
</div>