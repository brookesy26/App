const questionButton = document.getElementById('add-question-btn')
const allQuestionContainer = document.getElementById('all-questions-container')

let count = 0;
questionButton.addEventListener('click', ()=>{
    console.log('check button working ')
    console.log(count)
    count ++
//question label, textarea, 

    const questionDiv = document.createElement('div')
    questionDiv.classList.add('question-container')

    const questLabel = document.createElement('label');
    questLabel.innerHTML = 'Question Text'

    const textBox = document.createElement('textarea');
    textBox.classList.add('form-control')
    textBox.name = `question_${count}`
    textBox.required = true;

// Option label and input
    const optionDiv = document.createElement('div')
    optionDiv.classList.add(`option-container_${count}`)

    const label = document.createElement('label');
    label.innerHTML = 'Option'

    const input = document.createElement('input');
    input.type = 'text';
    input.classList.add('form-control');
    input.name = `option_${count}`
    input.required = true;
// option button
    const opButt = document.createElement('button')
    opButt.type = 'button'
    opButt.classList.add('btn')
    opButt.classList.add('btn-secondary')
    opButt.classList.add('mt-3')
    opButt.classList.add(`add-option-btn_${count}`)
    opButt.innerHTML = 'Add Option'
//append section
    questionDiv.appendChild(questLabel)
    questionDiv.appendChild(textBox)

    optionDiv.appendChild(label)
    optionDiv.appendChild(input)
    questionDiv.appendChild(optionDiv)
    questionDiv.appendChild(opButt)
    allQuestionContainer.appendChild(questionDiv)


const optionButton = document.querySelector(`.add-option-btn_${count}`)
optionButton.addEventListener('click', ()=>{
    console.log('test')
    const optionContainer = optionButton.parentNode.querySelector(`.option-container_${count}`)
    console.log('check but')
    const label = document.createElement('label');
    label.innerHTML = 'Option'
    const input = document.createElement('input');
    input.type = 'text';
    input.classList.add('form-control');
    const optionsCount = optionContainer.querySelectorAll('input').length + 1;
    input.name = `option_${count}_${optionsCount}`;
    input.required = true;
    optionContainer.appendChild(label)
    optionContainer.appendChild(input)
})
})

