global $user;
if ($user->uid)
{
  echo $pusher->socket_auth($_POST['channel_name'], $_POST['socket_id']);
}
else
{
  header('', true, 403);
  echo "Forbidden";
}