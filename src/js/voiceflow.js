(function (d, t) {
  var v = d.createElement(t), s = d.getElementsByTagName(t)[0];
  v.onload = function () {
    window.voiceflow.chat.load({
      verify: { projectID: '66827efe549ae53dca8f194c' },
      url: 'https://general-runtime.voiceflow.com',
      versionID: 'production'
    });
  }
  v.src = "https://cdn.voiceflow.com/widget/bundle.mjs";
  v.type = "text/javascript";
  v.defer = true;
  s.parentNode.insertBefore(v, s);
})(document, 'script');
