export default class Speech {
  constructor(text = 'bienvenidos', lang = 'en-MX') {
    this.text = text;
    this.lang = lang;
  }

  speak(obj = {}) {
      const text = obj.text || this.text;
      const utterance = new SpeechSynthesisUtterance();
      utterance.text = text;
      utterance.lang = this.lang;
      speechSynthesis.speak(utterance);
  }
}
