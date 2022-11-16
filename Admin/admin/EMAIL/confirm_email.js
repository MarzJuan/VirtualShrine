import emailjs from "emailjs-com";

export default function confirm(){
    function sendEmail(e) {
        e.preventDefault();

    emailjs.sendForm('gmail', 'template_6vgblm8', e.target, 'TwcgTH5wFr9G8qDTz')
        .then((result) => {
            console.log(result.text);
        }, (error) => {
            console.log(error.text);
        });
        e.target.reset()
    }
}