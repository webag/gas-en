<?
$channel_id = "UC20EysVcOs4LfvoIhra4epA";
$api_key = "AIzaSyAHP7Iegls0varMN__B80OC9j3GOwwW-48";

$video_list_query = file_get_contents("https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=". $channel_id. "&maxResults=8&order=date&type=video&key=". $api_key);
$video_list = json_decode($video_list_query);
?>

<?
foreach ($video_list->items as $key => $video) :
	$video__thumb = $video->snippet->thumbnails->medium->url;
	$video__title = $video->snippet->title;
	$video_id = $video->id->videoId;
	?>

	<div class="video-slide">
		<span data-videolink="https://www.youtube.com/watch?v=<?=$video_id?>" class="video-slide__link"></span>
		<span class="video-slide__num">0<?=$key+1?></span>
		<div class="video-slide__thumb" style="background-image: url(<?=$video__thumb?>)">
			<span class="btn-play"></span>
		</div>
		<p class="lead video-slide__title"><?=$video__title?></p>
	</div>

<?endforeach; ?>