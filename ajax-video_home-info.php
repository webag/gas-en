<?
$channel_id = "UC20EysVcOs4LfvoIhra4epA";
$api_key = "AIzaSyAHP7Iegls0varMN__B80OC9j3GOwwW-48";

$video_list_query = file_get_contents("https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=". $channel_id. "&maxResults=1&order=date&type=video&key=". $api_key);
$video_list = json_decode($video_list_query);
?>

<?
foreach ($video_list->items as $key => $video) :
	$video__thumb = $video->snippet->thumbnails->medium->url;
	$video__title = $video->snippet->title;
	$video_id = $video->id->videoId;
	?>

	<a href="https://www.youtube.com/watch?v=<?=$video_id?>" class="intro-thumb fancy-video">
		<div class="intro-thumb__img" style="background-image: url(<?=$video__thumb?>)"></div>
		<header class="intro-thumb__header">
			<div class="intro-label intro-label--video">Новое видео</div>
			<img src="<?=SITE_TEMPLATE_PATH?>/img/youtube.svg" alt="" height="22" width="54">
		</header>
		<h5 class="lead"><?=$video__title?></h5>
	</a>

<?endforeach; ?>