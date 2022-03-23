export default class Speech {
  constructor(text = 'bienvenidos', lang = 'es-US') {
      this.text = text
      this.synth =  window.speechSynthesis
      this.utterance = new window.SpeechSynthesisUtterance()
      setTimeout(() => {
          let voices = this.synth.getVoices()
          this.utterance.voice = voices.find(voice => voice.lang === lang)
      }, 50)
  }

  speak(obj = {}) {
      const text = obj.text || this.text
      this.utterance.text = text
      this.synth.speak(this.utterance)
  }
}
