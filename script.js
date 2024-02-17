const { __ } = wp.i18n

const welcome = __('HELLO FROM JAVASCRIPT', 'my-i18n-demo')

console.log(welcome)

document.querySelector('#button').addEventListener('click', () => {
  const greeting = __('You have clicked this button', 'my-i18n-demo')

  alert(greeting)
})
