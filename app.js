const classSelect =
    document.querySelector('#class');

const tanuloSelect =
    document.querySelector('#tanulo');

classSelect.addEventListener(
    'change',
    () => {

        makeSelect.innerHTML = `
            <option value="">
                Válassz Tanulót
            </option>
        `;

        fetch(
            `ajax.php?action=makes&class=${classSelect.value}`
        )
            .then(response => response.json())
            .then(makes => {

                makes.forEach(make => {

                    makeSelect.innerHTML += `
                        <option value="${tanulo}">
                            ${tanulo}
                        </option>
                    `;

                });

            });

    }
);

makeSelect.addEventListener(
    'change',
    () => {

        modelSelect.innerHTML = `
            <option value="">
                Válassz modellt
            </option>
        `;

        fetch(
            `ajax.php?action=class=${classSelect.value}&tanulo=${tanuloSelect.value}`
        )
            .then(response => response.json())
            .then(models => {

                models.forEach(model => {

                    modelSelect.innerHTML += `
                        <option value="${model}">
                            ${model}
                        </option>
                    `;

                });

            });

    }
);