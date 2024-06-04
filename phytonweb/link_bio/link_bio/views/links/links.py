import reflex as rx
from link_bio.componentes.link_button import link_button
from link_bio.componentes.title import title
from link_bio.styles.styles import Size as Size
from link_bio import constants


def links() -> rx.Component:
    return rx.vstack(
        title("Mis enlaces"),
        link_button(
            "Linkedin", 
            "Red de contactos profesional.",
            "icons/linkedin.svg",
            constants.LINKEDIN_URL
        ),
        link_button(
            "Git-hub",
            "El código importa y se comparte.",
            "icons/github.svg",
            constants.GITHUB_URL
        ),
            link_button(
            "Mi currículum",
            "Revisa mi experiencia profesional y académica.",
            "icons/id-card-solid.svg",
            constants.CV
        ),
        title("Proyectos"),
        link_button(
            "Mi Web de enlaces",
            "Python y REFLEX",
            "icons/reflex.svg",
            constants.WEB_LINKS
        ),
        rx.spacer(Size.SMALL.value),
        rx.vstack(
            link_button(
                "Tudú App (Backend)",
                "Django, DRF, PostgreSQL",
                "icons/django.svg",
                constants.TUDU_APP_BACKEND
            ),
            link_button(
                "Tudú App (Frontend)",
                "Vue.js, Vuetify, Axios, Vuex",
                "icons/vuejs.svg",
                constants.TUDU_APP_FRONTEND
            ),

        ),
        title("Proyectos donde colaboro"),
        link_button(
            "Live4Life (Fullstack)",
            "Django, Vue.js, PostgreSQL, Docker",
            "icons/django.svg",
            constants.LIVE_4_LIFE
        ),
        title("Contacto"),
        link_button(
            "Email",
            f"Escríbeme!",
            "icons/envelope-solid.svg",
            f"mailto:{constants.EMAIL}"
        ),
        link_button(
            "Whatsapp",
            "'Hello world!', no dudes en contactarme!",
            "icons/whatsapp.svg",
            constants.WHATSAPP,
        ),
        spacing = Size.MEDIUM.value,    
    )
