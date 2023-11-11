import reflex as rx
from link_bio.styles.styles import Size as Size


def link_langs(icon:str) -> rx.Component:
    return rx.image(
            height = Size.VERY_BIG.value,
            src=icon
    )
    