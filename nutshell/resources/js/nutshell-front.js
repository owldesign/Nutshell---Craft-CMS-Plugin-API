(function($) {
  return window.Nutshell = Garnish.Base.extend({
    $el: null,
    $testApiBtn: null,
    init: function(el) {
      this.$el = $(el);
      this.$testApiBtn = this.$el.find('#test-api-btn');
      return this.addListener(this.$testApiBtn, 'click', 'testApi');
    },
    testApi: function(e) {
      var data;
      e.preventDefault();
      console.log('Test Clicked');
      data = {
        foo: 'bar'
      };
      return Craft.postActionRequest('nutshell/testApi', data, function(response, textStatus) {
        console.log(response);
        return console.log(textStatus);
      });
    }
  });
})(jQuery);
