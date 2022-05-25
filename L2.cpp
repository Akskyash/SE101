#include <stdio.h>

int main()
{

    int a[100], n, i, mn, mx;

    printf("Enter the size of array: ");
    scanf("%d", &n);

    printf("\nEnter the numbers in array: \n");
    for(i=0; i<n; i++)
    {
        scanf("%d", &a[i]);
    }

    mn=mx=a[0];

    for(i=1; i<n; i++)
    {
        if(mn>a[i])
            mn=a[i];

        if(mx<a[i])
            mx=a[i];
    }

    printf("\nMinimum: %d", mn);
    printf("\n\nMaximum: %d", mx);

    return 0;
}
