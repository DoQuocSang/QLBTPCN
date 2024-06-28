// loader 
const loader = document.querySelector(".loader-container");
window.addEventListener("load", () => {
  loader.classList.add("active")
});

// scroll to top button
const sttBtn = document.querySelector(".scroll-top-btn");
window.addEventListener("scroll", () => {
  sttBtn.classList.toggle("show-stt-btn", window.pageYOffset > 500)
});

sttBtn.onclick = function() {
  window.scrollTo({top:0, behavior: 'smooth'})
}

'use strict';

// mobile menu variables
const mobileMenuOpenBtn = document.querySelectorAll('[data-mobile-menu-open-btn]');
const mobileMenu = document.querySelectorAll('[data-mobile-menu]');
const mobileMenuCloseBtn = document.querySelectorAll('[data-mobile-menu-close-btn]');
const overlay = document.querySelector('[data-overlay]');

for (let i = 0; i < mobileMenuOpenBtn.length; i++) {

  // mobile menu function
  const mobileMenuCloseFunc = function () {
    mobileMenu[i].classList.remove('active');
    overlay.classList.remove('active');
  }

  mobileMenuOpenBtn[i].addEventListener('click', function () {
    mobileMenu[i].classList.add('active');
    overlay.classList.add('active');
  });

  mobileMenuCloseBtn[i].addEventListener('click', mobileMenuCloseFunc);
  overlay.addEventListener('click', mobileMenuCloseFunc);

}





// accordion variables
const accordionBtn = document.querySelectorAll('[data-accordion-btn]');
const accordion = document.querySelectorAll('[data-accordion]');

for (let i = 0; i < accordionBtn.length; i++) {

  accordionBtn[i].addEventListener('click', function () {

    const clickedBtn = this.nextElementSibling.classList.contains('active');

    for (let i = 0; i < accordion.length; i++) {

      if (clickedBtn) break;

      if (accordion[i].classList.contains('active')) {

        accordion[i].classList.remove('active');
        accordionBtn[i].classList.remove('active');

      }

    }

    this.nextElementSibling.classList.toggle('active');
    this.classList.toggle('active');

  });

}

//Theme
const body = document.querySelector('body');
const themeBtn = document.querySelector('.checkbox');
themeBtn.onclick = function() {
  body.classList.toggle('active')
}

//warning
const userBtn = document.querySelector('[data-user]');
const bellBtn = document.querySelector('[data-bell]');
const mbBellBtn = document.querySelector('[data-mb-bell]');
const warning = document.querySelector('[data-warning]');
const warningCloseBtn = document.querySelector('[data-warning-close]');
const warningCloseOverlay = document.querySelector('[data-warning-overlay]');

// bell btn
bellBtn.onclick = function() {
  warning.classList.toggle('show-warning');
}

mbBellBtn.onclick = function() {
  warning.classList.toggle('show-warning');
}

// user btn
userBtn.onclick = function() {
  warning.classList.toggle('show-warning');
}

// warning close
const warningCloseFunc = function() {
  warning.classList.remove('show-warning');
}

overlay.addEventListener('click',  warningCloseFunc);
warningCloseBtn.addEventListener('click',  warningCloseFunc);
warningCloseOverlay.addEventListener('click',  warningCloseFunc);

//Cart
const cartCloseBtn = document.querySelector('[data-cart-close-btn]');
const cart = document.querySelector('[data-cart]');
const mobileCart = document.querySelector('[data-mb-cart]')
const cartSidebar = document.querySelector('.cart-sidebar');
//------------------desktop
cart.onclick = function() {
  cartSidebar.classList.toggle('show-cart');
  overlay.classList.toggle('active');
}

const cartCloseFunc = function() {
  cartSidebar.classList.remove('show-cart');
  overlay.classList.remove('active');
}

overlay.addEventListener('click', cartCloseFunc);
cartCloseBtn.addEventListener('click', cartCloseFunc);

//------------------mobile 
mobileCart.onclick = function() {
  cartSidebar.classList.toggle('show-cart');
}

//Login
const loginCloseBtn = document.querySelector('[data-login-close-btn]');
const loginLink = document.querySelector('[data-login-link]');
const mobileLoginLink = document.querySelector('[data-mb-login-link]');
const login = document.querySelector('.login');

//------------------desktop
loginLink.onclick = function() {
  login.classList.toggle('show-login')
  overlay.classList.toggle('active');
}

const loginCloseFunc = function() {
  login.classList.remove('show-login')
  overlay.classList.remove('active');
}

overlay.addEventListener('click', loginCloseFunc);
loginCloseBtn.addEventListener('click', loginCloseFunc);

//------------------mobile
mobileLoginLink.onclick = function() {
  login.classList.toggle('show-login')
}

//Signup
const signupCloseBtn = document.querySelector('[data-signup-close-btn]');
const signupLink = document.querySelector('[data-signup-link]');
const mobileSignupLink = document.querySelector('[data-mb-sign-link]');
const signup = document.querySelector('.signup-sidebar');

const signupForm = document.querySelector('.signup-form');
const signupUsername = document.querySelector('.username.signup');
const signupEmail = document.querySelector('.email.signup');
const signupPass = document.querySelector('.password.signup');
const signupPassCheck = document.querySelector('.password-check.signup');
const signupPhoneNumber = document.querySelector('.phone-number.signup');
const signupAddress = document.querySelector('.address.signup');

//------------------desktop
signupLink.onclick = function() {
  signup.classList.toggle('show-signup')
  overlay.classList.toggle('active');
}

const signupCloseFunc = function() {
  signup.classList.remove('show-signup')
  overlay.classList.remove('active');
}

overlay.addEventListener('click', signupCloseFunc);
signupCloseBtn.addEventListener('click', signupCloseFunc);

//------------------mobile
mobileSignupLink.onclick = function() {
  signup.classList.toggle('show-signup')
}

//------------------signup validation
signupForm.addEventListener('submit', e => { 
  e.preventDefault();
  checkInputs()
})

function checkInputs() {
  const usernameValue = signupUsername.value.trim();
  const emailValue = signupEmail.value.trim();
  const passwordValue = signupPass.value.trim();
  const passwordCheckValue = signupPassCheck.value.trim();
  const phoneNumberValue = signupPhoneNumber.value.trim();
  const addressValue = signupAddress.value.trim();

  if(usernameValue === '') {
		setErrorFor(signupUsername, 'Tên người dùng không được bỏ trống');
	} else {
		setSuccessFor(signupUsername);
	}

  if(emailValue === '') {
		setErrorFor(signupEmail, 'Địa chỉ email không được bỏ trống');
	} else if (!isEmail(emailValue)) {
		setErrorFor(signupEmail, 'Địa chỉ email không hợp lệ');
	} else {
		setSuccessFor(signupEmail);
	}
	
	if(passwordValue === '') {
		setErrorFor(signupPass, 'Mật khẩu không được bỏ trống');
	} else {
		setSuccessFor(signupPass);
	}
	
	if(passwordCheckValue === '') {
		setErrorFor(signupPassCheck, 'Vui lòng không bỏ trống');
	} else if(passwordValue !== passwordCheckValue) {
		setErrorFor(signupPassCheck, 'Mật khẩu không trùng khớp');
    console.log(signupPass.value, signupPassCheck.value)
	} else{
		setSuccessFor(signupPassCheck);
	}

  if(phoneNumberValue === '') {
		setErrorFor(signupPhoneNumber, 'Số điện thoại không được bỏ trống');
  } else if(!isPhoneNumber(phoneNumberValue)) {
		setErrorFor(signupPhoneNumber, 'Số điện thoại không hợp lệ');
  } else {
		setSuccessFor(signupPhoneNumber);
	}

  if(addressValue === '') {
		setErrorFor(signupAddress, 'Địa chỉ không được bỏ trống');
  } else {
		setSuccessFor(signupAddress);
	}
}

function setErrorFor(input, message) {
	const signupContent = input.parentElement;
	const small = signupContent.querySelector('small');
	signupContent.className = 'signup-content error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const signupContent = input.parentElement;
	signupContent.className = 'signup-content success';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function isPhoneNumber(phoneNumber) {
	return /^[0-9]{10}$/.test(phoneNumber);
}