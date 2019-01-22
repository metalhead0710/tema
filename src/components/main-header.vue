<template>
    <header class="header" id="header">
        <div class="container">
            <a href="/" class="header__brand">
                <img src="@/assets/images/logo.png"/>
            </a>
            <nav id="nav" class="nav" role="navigation">
                <button class="nav__toggle hamburger hamburger--spin" @click="toggleable()" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
                <ul class="nav__inner nav__menu" id="menu" tabindex="-1" aria-label="main navigation">
                    <li class="nav__item">
                        <router-link class="nav__link" to="/">Home</router-link>
                    </li>
                    <li class="nav__item dropdown">
                        <span class="nav__link" >Managed Services</span>
                        <ul class="dropdown__list">
                            <li class="dropdown__item">
                                <router-link class="dropdown__link" to="/application-services">Application Services</router-link>
                            </li>
                            <li class="dropdown__item">
                                <router-link class="dropdown__link" to="/infrastructure-services">Infrastructure Services</router-link>
                            </li>
                            <li class="dropdown__item">
                                <router-link class="dropdown__link" to="/managed-cloud">Managed Cloud</router-link>
                            </li>
                            <li class="dropdown__item">
                                <router-link class="dropdown__link" to="/managed-database">Managed Database</router-link>
                            </li>
                            <li class="dropdown__item">
                                <router-link class="dropdown__link" to="/monitoring-and-metrics">Monitoring &amp; Metrics</router-link>
                            </li>
                        </ul>
                    </li>
                    <li class="nav__item dropdown">
                        <span class="nav__link">Solutions</span>
                        <ul class="dropdown__list">
                            <li class="dropdown__item">
                                <router-link class="dropdown__link" to="/cloud-transformation">Cloud Transformation</router-link>
                            </li>
                            <li class="dropdown__item">
                                <router-link class="dropdown__link" to="/private-cloud">Private Cloud</router-link>
                            </li>
                            <li class="dropdown__item">
                                <router-link class="dropdown__link" to="/secure-log-management">Secure Log Management</router-link>
                            </li>
                        </ul>
                    </li>
                    <li class="nav__item dropdown">
                        <span class="nav__link">Security &amp; Compliance</span>
                        <ul class="dropdown__list">
                            <li class="dropdown__item">
                                <router-link class="dropdown__link" to="/compliance-assistance">Compliance Assistance</router-link>
                            </li>
                            <li class="dropdown__item">
                                <router-link class="dropdown__link" to="/managed-security">Managed Security</router-link>
                            </li>
                            <li class="dropdown__item">
                                <router-link class="dropdown__link" to="/privacy-and-data-protection">Privacy &amp; Data Protection</router-link>
                            </li>
                        </ul>
                    </li>
                    <li class="nav__item">
                        <router-link class="nav__link" to="/contacts">Contacts</router-link>
                    </li>
                    <li class="nav__item">
                        <router-link class="nav__link" to="/test">Tst</router-link>
                    </li>
                    <li class="nav__item hidden">
                        <a class="nav__link" to="https://cloud.platops.com/login" target="_blank">Login</a>
                    </li>
                    <li class="nav__item hidden">
                        <a class="nav__link" to="https://cloud.platops.com/signup">Sign up</a>
                    </li>
                </ul>
            </nav>
            <div class="header__buttons">
                <button class="btn btn-sm-light" onclick="window.open('https://cloud.platops.com/login')">Login</button>
                <button class="btn btn-sm-dark" onclick="window.open('https://cloud.platops.com/signup')">Sign up</button>
            </div>
        </div>
    </header>
</template>

<script>

export default {
    name: 'MainHeader',
    data () {
        return {
            logo: 'PlatOPS'
        }
    },
    methods: {
        toggleable: function() {
            let hamburger = document.querySelector(".hamburger");
            hamburger.classList.toggle("is-active");
            var x = document.getElementById("menu");
            x.classList.toggle("responsive");
            var y = document.getElementById("header");
            y.classList.toggle("colored");
        }
    },
    mounted () {
        var prevScrollpos = window.pageYOffset;
        var header = document.getElementById("header");
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("header").style.top = "0";
                header.classList.add("header__sticky");
            } else {
                document.getElementById("header").style.top = "-77px";
            }
            prevScrollpos = currentScrollPos;
            if (currentScrollPos == 0 || prevScrollpos == 0) {
                header.classList.remove("header__sticky");
            }
        }
    }
}
</script>

<style scoped lang="scss">

.hidden {
    display: none;
}

.header {
    font-size: 0.875rem;
    font-weight: 500;
    width: 100%;
    position: absolute;
    top: 0;
    z-index: 2;
    padding: 0 1rem;
    background-color: transparent;
    transition: all 0.3s ease-in-out;
    &__sticky {
        position: fixed;
        background-color:rgb(0, 130, 236);
    }
    .container {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }
    a {
        text-decoration: none;
    }
    &__brand {
        padding: 0;
        line-height: 2.625rem;
        display: flex;
        color: #fff;
        p {
            font-size: 1.25rem;
            margin: 0;
        }
        img {
            height: 42px;
            padding-right: 0.3rem;
        }
    }
}

.nav {
    &__toggle {
        display: none;
    }
    &__inner {
        list-style: none;
        display: flex;
        flex-direction: row;
        margin: 0;
        padding: 0;
    }
    &__link {
        display: flex;
        margin: 23px 18px 23px 18px;
        padding: 5px 0;
        position: relative;
        color: #fff;
        cursor: pointer;
        &:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            background: #fff;
            visibility: hidden;
            border-radius: 5px;
            transform: scaleX(0);
            transition: .25s linear;
        }
        &:hover:before,
        &:focus:before {
            visibility: visible;
            transform: scaleX(1);
        }
    }
}

.dropdown {
    &__list {
        position: absolute;
        left: 18px;
        list-style: none;
        padding: 0;
        min-width: 250px;
        visibility: hidden;
        opacity: 0;
        transform: translateY(-2em);
        z-index: -2;
        transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;
        padding: 15px 20px;
        background-color: #fff;
        box-shadow: 0px 9px 68px -10px rgba(0,0,0,0.2);

    }
    &__item {
        a {
            color: #293b5f;
            padding: 8px 10px;
            text-decoration: none;
            display: block;
            transition: all 0.3s ease;
            &:hover {
                color: #fff;
                background-color: rgb(0, 130, 236);
            }
        }
    }
    &:hover .dropdown__list {
        visibility: visible;
        opacity: 1;
        z-index: 1;
        transform: translateY(0%);
        transition-delay: 0s, 0s, 0.3s;
    }
}

/* MEDIA - small screens */
@media screen and (max-width: 1365px) {
    .nav {
        &__menu {
            display: none;
        }
        &__toggle {
            display: block;
        }
        &__inner {
            flex-direction: column;
            margin-top: 10px;
            margin-bottom: 40px;
        }
        &__link {
            display: flex;
            justify-content: center;
            color: #fff;
            font-size: 1.25rem;
            &:before {
                content: none;
            }
            &:hover:before,
            &:focus:before {
                visibility: hidden;
            }
        }
    }

    .responsive {
        display: flex;
    }

    .colored {
        background-color: rgb(0, 130, 236);
    }

    .header {
        padding: 10px;
        &__buttons {
            display: none;
        }
        &__brand {
            display: flex;
            align-self: flex-start;
        }
        .container {
            flex-direction: column;
        }
    }

    .hidden {
        display: block;
    }

    .hamburger {
        padding: 0;
        position: absolute;
        top: 18px;
        right: 10px;
    }

    .hamburger-inner,
    .hamburger-inner::before,
    .hamburger-inner::after,
    .hamburger.is-active .hamburger-inner,
    .hamburger.is-active .hamburger-inner::before,
    .hamburger.is-active .hamburger-inner::after {
        background-color: #fff;
    }

    .hamburger:hover,
    .hamburger.is-active:hover {
        opacity: 1;
    }
}

</style>
