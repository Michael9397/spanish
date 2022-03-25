describe('conjugate multiple verbs', () => {
    beforeEach(() => {
        cy.refreshDatabase()
    })

    it('can select mode and tense', () => {
        cy.visit(Cypress.Laravel.route('guest.conjugate.multiple'))
        cy.get('#mode-selector').select('perfect')
        cy.get('#tense-selector').select('future')
        cy.contains('Perfect Future')
    })

    it('shows correct svg when correct answer inserted', () => {
        cy.visit(Cypress.Laravel.route('guest.conjugate.multiple'))
        cy.get('#mode-selector').select('imperative')
        cy.get('#tense-selector').select('affirmative')
        cy.get('#hablar-tu').type('habla')
        cy.get('#hablar-tu-correct-svg').should('exist')
        cy.get('#hablar-tu').type('abc')
        cy.get('#hablar-tu-correct-svg').should('not.exist')
    })

    it('toggles the answer when selected', () => {
        cy.visit(Cypress.Laravel.route('guest.conjugate.multiple'))
        cy.get('#mode-selector').select('progressive')
        cy.get('#tense-selector').select('preterite')
        cy.get('#ser-el-toggle-current-answer').click()
        cy.get('#ser-el-correct-answer').should('exist')
        cy.get('#ser-el-hide-current-answer').click()
        cy.get('#ser-el-correct-answer').should('not.exist')
    })

    it('clears_answers_when_clear_button_pressed', ()=> {

        cy.visit(Cypress.Laravel.route('guest.conjugate.multiple'))
        cy.get('#hablar-yo').type('Hopefully')
        cy.get('#hablar-tu').type('This')
        cy.get('#hablar-el').type('Disappears')
        cy.get('button:contains("Clear")').click()
        cy.get('#hablar-yo').should('have.value', '')
        cy.get('#hablar-tu').should('have.value', '')
        cy.get('#hablar-el').should('have.value', '')

        cy.visit(Cypress.Laravel.route('guest.conjugate.single'))
        cy.get('#indicative-present-yo').type('Hopefully')
        cy.get('#indicative-present-tu').type('This')
        cy.get('#indicative-present-el').type('Disappears')
        cy.get('button:contains("Clear")').click()
        cy.get('#indicative-present-yo').should('have.value', '')
        cy.get('#indicative-present-tu').should('have.value', '')
        cy.get('#indicative-present-el').should('have.value', '')

        cy.login()
        cy.visit(Cypress.Laravel.route('conjugate.multiple'))
        cy.get('#hablar-yo').type('Hopefully')
        cy.get('#hablar-tu').type('This')
        cy.get('#hablar-el').type('Disappears')
        cy.get('button:contains("Clear")').click()
        cy.get('#hablar-yo').should('have.value', '')
        cy.get('#hablar-tu').should('have.value', '')
        cy.get('#hablar-el').should('have.value', '')

        cy.visit(Cypress.Laravel.route('conjugate.single'))
        cy.get('#indicative-present-yo').type('Hopefully')
        cy.get('#indicative-present-tu').type('This')
        cy.get('#indicative-present-el').type('Disappears')
        cy.get('button:contains("Clear")').click()
        cy.get('#indicative-present-yo').should('have.value', '')
        cy.get('#indicative-present-tu').should('have.value', '')
        cy.get('#indicative-present-el').should('have.value', '')



    })
})
