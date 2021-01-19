---
title: 'Incontri del Terzo Luogo'
published: true
process:
    markdown: true
    twig: false

content :
    items: '@self.modular'
    order:
        by: default
        dir: desc
        custom:
            - _affidamenti
            - _approdi
            - _equilibrismi
            - _improvvisazione
            - _indecisione
            - _la_minima_cura
            - _spaesamenti
            - _storia
    limit: 10
    pagination: true
---
