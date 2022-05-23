let tooltip = document.querySelector('.tooltip');
let closeButton = document.querySelector('.close-button');
let tooltipButtons = document.querySelectorAll('.tooltip-button');
let tooltipText = document.querySelector('.tooltip-text');


tooltipButtons[0].onclick = function () {
  tooltipText.textContent = tooltipButtons[0].dataset.tooltipText;
  tooltip.classList.add('opened');
};

closeButton.onclick = function () {
  tooltip.classList.remove('opened');
};
