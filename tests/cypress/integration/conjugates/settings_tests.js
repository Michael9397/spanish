describe('conjugate settings tests', () => {
    beforeEach(() => {
        cy.refreshDatabase()
        cy.login()
    })

    it('uses default settings of hablar, comer, and subir', () => {
        cy.visit('/conjugate/multiple')
        cy.contains('hablar')
        cy.contains('comer')
        cy.contains('subir')
    })

    it('saves settings changes under the correct user', () => {
        cy.visit('/settings')
        cy.get('#ar-verb').select('ayudar')
        cy.get('#er-verb').select('deber')
        cy.get('#ir-verb').select('vivir')
        cy.get('#save-settings').click()
        cy.currentUser().its('settings').should((setting) => {
            expect(setting.conjugateSelections.ar).to.equal('ayudar')
            expect(setting.conjugateSelections.er).to.equal('deber')
            expect(setting.conjugateSelections.ir).to.equal('vivir')
        })
        cy.visit('/conjugate/multiple')
        cy.contains('ayudar')
        cy.contains('deber')
        cy.contains('vivir')
    })
})
