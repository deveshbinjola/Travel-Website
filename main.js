
var feed = new Instafeed({
    get: 'user',
    userId: 313091419,
	accessToken: '313091419.1677ed0.783cb0497ae44631807981e5096a46b1',
	target: 'instagram',
	limit: '9',
	resolution: 'standard_resolution',
  filter: function(image) {
    return image.tags.indexOf('somehashtag') >= 0;
  }
});
feed.run();
