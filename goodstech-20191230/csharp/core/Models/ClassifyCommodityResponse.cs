// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Goodstech.Models
{
    public class ClassifyCommodityResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ClassifyCommodityResponseData Data { get; set; }
        public class ClassifyCommodityResponseData : TeaModel {
            [NameInMap("Categories")]
            [Validation(Required=true)]
            public List<ClassifyCommodityResponseDataCategories> Categories { get; set; }
            public class ClassifyCommodityResponseDataCategories : TeaModel {
                    public float? Score { get; set; }
                    public string CategoryName { get; set; }
                    public string CategoryId { get; set; }
            }
        };

    }

}
