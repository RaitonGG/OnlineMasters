var construction_firm_Keyboard_loop = function (elem) {
  var construction_firm_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');
  var construction_firm_firstTabbable = construction_firm_tabbable.first();
  var construction_firm_lastTabbable = construction_firm_tabbable.last();
  construction_firm_firstTabbable.focus();

  construction_firm_lastTabbable.on('keydown', function (e) {
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      construction_firm_firstTabbable.focus();
    }
  });

  construction_firm_firstTabbable.on('keydown', function (e) {
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      construction_firm_lastTabbable.focus();
    }
  });

  elem.on('keyup', function (e) {
    if (e.keyCode === 27) {
      elem.hide();
    };
  });
};