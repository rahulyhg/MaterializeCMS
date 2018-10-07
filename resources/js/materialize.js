document.addEventListener('DOMContentLoaded', function() {
  var dropdownElems = document.querySelectorAll('.dropdown-trigger');
  var dropdownOptions = {constrainWidth: false, alignment: 'right'};
  var dropdownInstances = M.Dropdown.init(dropdownElems, dropdownOptions);

  var sidenavElems = document.querySelectorAll('.sidenav');
  var sidenavInstances = M.Sidenav.init(sidenavElems);

  var collapsibleElems = document.querySelectorAll('.collapsible');
  var collapsibleInstances = M.Collapsible.init(collapsibleElems);
});