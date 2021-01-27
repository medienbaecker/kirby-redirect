panel.plugin('medienbaecker/redirect', {
  fields: {
    redirect: {
      props: {
        redirect: String
      },
      render: function() {
        window.location.href = this.redirect;
      }
    }
  }
});
