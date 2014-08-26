angular.module('words.services.PostService', [])

.factory('PostService', ['$resource', function($resource) {

    var Post = $resource('/posts/:id');

    this.all = function() {
        return Post.query();
    };

    this.single = function(id) {
        return Post.get({id: id});
    };

    this.save = function(post) {
        return Post.save({}, {
            title: post.title,
            body: post.body,
            summary: post.summary
        }, function(success) {
            alert('Successfully saved post.');
        }, function(error) {
            alert(error.data.message);
        });
    };

    this.unpublished = function() {
        var UnPubPost = $resource('/posts/unpublished');
        return UnPubPost.query();
    };

    return this;

}])