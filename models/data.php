<?php
/*******************************************************
Data.php
This file holds all database queries and data-related functions.
*******************************************************/

require_once('../controllers/main.php');

class data extends main {
	
	function query_regsales($cat, $sub_cat, $creator, $min_price, $max_price, $mostsales, $verified) {
		
		$args = func_get_args();
		
		for ($i = 0; $i < 7; $i++) //if args are not set, set to wildcard value (%)
		{
			if ($args[$i] == "") 
			{
				$args[$i] = '%';
			}
		}
		
		if ($args[3] == "%") $args[3] = 0; //if min price is not set, set min price to 0
		if ($args[4] == "%") $args[4] = 99999999; //If max price is not set, set max price to max
		
		if ($args[5] == "1") $args[5] = "ORDER BY sales DESC"; //if mostsales is 1, order by sales
		else $ars[5] = "";
		
		$sql = "
		SELECT *
		FROM regsales
		WHERE cat LIKE '$args[0]' AND sub_cat LIKE '$args[1]' AND creator LIKE '$args[2]' AND price > $args[3] AND price < $args[4] AND verified = '$args[6]'
		";//.$args[5];
		
		$query = mysql_query($sql);
		
		if (mysql_num_rows($query)==0) echo '<br><div class="warning">Sorry I couldn\'t find any posts with the criteria you specified. Why not try searching?</div>';
		
		if ($query)	return $query;
		else return mysql_error();
		
	}
	
	
	function displayList ($query) {
		
		while ($row = mysql_fetch_array($query)) 
		{
			
			$thumb = '<img src="../models/users/upload/'. $row[creator] .'/'. $row[id] .'/thumb.jpg" alt="Loading image..." />';
			$previewURL = '../models/users/upload/'. $row[creator] .'/'. $row[id] . '/preview.jpg';
			$singlePageURL = '../views/single.php?postTitle='. $row[title] .'&amp;id=' . $row[id];
			$authorPageURL = '../views/profile.php?author='. $row[author];
			
			?>

<div class="postWhole">
  <div class="thumb">
    <a href="<?php echo $singlePageURL; ?>" class="preview" rel="<?php echo $previewURL; ?>"> <?php echo $thumb; ?> </a>
  </div>
  <div class="postContent">
    <div class="postPriceData">
      <span class="Price">
        $<?php echo $row[price]; ?>
      </span>
    </div>
    <div class="postTitle">
      <a href="<?php echo $singlePageURL; ?>"> <?php echo $row[title]; ?> </a>
    </div>
    <div class="postMetaData">
      <span class="cat">
        Category: <?php echo '<a href="index.php?cat='.$row[cat].'">' . $row[cat] . '</a> > ';
                echo '<a href="index.php?cat='.$row[cat].'&subcat='.$row[sub_cat].'">'. $row[sub_cat] . '</a>';?>&nbsp;&nbsp;&nbsp;
      </span>
      <span class="author">
        <a href="<?php echo $authorPageURL; ?>"> <img src="../models/UI/global_imgs/author.png" alt="Author" width="16" height="16" /> <?php echo $row[creator]; ?></a> &nbsp;&nbsp;&nbsp;
      </span>
      <span class="verified">
        <a href="../views/info/whatIsVerification.php?height=220&width=500" title="What is Verification?" onclick="return verifModal()"> Verified:
        <?php if ($row[verified]==1){ ?>
        <img src="../models/UI/global_imgs/Symbol-Check.png" alt="verified" width="16" height="16" />
        <?php } else { ?>
        <img src="../models/UI/global_imgs/nonverified.png" alt="verified" width="16" height="16" />
        <?php } //close else ?>
        </a>
      </span>
    </div>
    <div class="postExcerpt">
      <?php echo "<p>".$row[short_desc]."</p>"; ?>
    </div>
  </div>
</div>
<?php
		}//end while loop
	} //end displayList function
	
}//end class

?>
