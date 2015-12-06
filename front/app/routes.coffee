#--------------------------------------------------------------------------
# Routes
#--------------------------------------------------------------------------
#
# All routes of your application.
#
# @see http://gothamjs.io/documentation/1.0.0/routing
##

module.exports = (route) ->

  route.match '/', ->

    $('a').click ->
      $('html, body').animate
        scrollTop: $($.attr(this, 'href')).offset().top
      , 900
      
