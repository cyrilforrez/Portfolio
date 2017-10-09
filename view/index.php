<?php
$projects = [array(
  'title' => 'Stone Scissors Sheet',
  'title2' => 'Stone Scissors Sheet',
  'description' => 'Creation of a stone scissors sheet in DOM',
  'img' =>  "img/pcfDOM.png",
  'link' => 'https://cyrilforrez.github.io/Pierre-Feuille-ciseaux/',
  'github' => 'https://github.com/cyrilforrez/Pierre-Feuille-ciseaux'
),

  array(
    'title' => 'Set Of Pairs',
    'title2' => 'Set Of Pairs',
    'description' => 'Creation of a set of pairs in DOM',
    'img' => "img/pfc.png",
    'link' => 'https://cyrilforrez.github.io/Jeux-des-paires/',
    'github' => 'https://github.com/cyrilforrez/Jeux-des-paires'

  ),

  array(
    'title' => 'Gametech',
    'title2' => 'Gametech',
    'description' => 'creation of a blog on technologies (video games, apps, software, etc ...)',
    'img' => "img/gametech.png",
    'link' => 'https://cyrilforrez.github.io/Gametech/',
    'github' => 'https://github.com/cyrilforrez/Gametech'
  ),

  array(
    'title' => 'Slideshow',
    'title2' => 'Slideshow',
    'description' => 'Creating a Slideshow',
    'img' => "img/slideshow.png",
    'link' => "https://cyrilforrez.github.io/Slideshow/",
    'github' => 'https://github.com/cyrilforrez/Slideshow'
  ),]?>

<div class="row">
  <?php
foreach ($projects as $project) { ?>

  <div class="card col s4" id="card1">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="<?php echo $project['img']?>">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?php echo $project['title']?><i class="material-icons right">more_vert</i></span>
      <p><a href="<?php echo $project['link']; ?>">Link</a></p>
      <p><a href="<?php echo $project['github']; ?>">Link github</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?php echo $project['title2']?><i class="material-icons right">close</i></span>
      <p><?php echo $project['description']?></p>
    </div>
  </div>
  <?php
}
?>
</div>
