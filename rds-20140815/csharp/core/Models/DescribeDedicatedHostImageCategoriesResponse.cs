// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDedicatedHostImageCategoriesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Images")]
        [Validation(Required=true)]
        public DescribeDedicatedHostImageCategoriesResponseImages Images { get; set; }
        public class DescribeDedicatedHostImageCategoriesResponseImages : TeaModel {
            [NameInMap("Images")]
            [Validation(Required=true)]
            public List<DescribeDedicatedHostImageCategoriesResponseImagesImages> Images { get; set; }
            public class DescribeDedicatedHostImageCategoriesResponseImagesImages : TeaModel {
                    public string ImageName { get; set; }
                    public string ImageCode { get; set; }
            }
        };

    }

}
