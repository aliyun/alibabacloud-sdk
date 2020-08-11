// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeHaVipsRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

        [NameInMap("Filter")]
        [Validation(Required=false)]
        public List<DescribeHaVipsRequestFilter> Filter { get; set; }
        public class DescribeHaVipsRequestFilter : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=true)]
            public string Key { get; set; }

            [NameInMap("Value")]
            [Validation(Required=true)]
            public List<string> Value { get; set; }

        }

    }

}
