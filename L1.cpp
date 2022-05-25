#include <stdio.h>

int main()
{
    int n, i;
    float num, sum = 0.0, avg;

    printf("Enter the number: ");
    scanf("%d", &n);

    for (i = 0; i < n; ++i)
    {
        printf("Enter the values: ", i + 1);
        scanf("%f", &num);
        sum += num;
    }

    avg = (sum / n);

    printf("Average value: %.2f", avg);

    return 0;
}

