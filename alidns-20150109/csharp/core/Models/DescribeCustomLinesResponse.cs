// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeCustomLinesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalItems")]
        [Validation(Required=true)]
        public int? TotalItems { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("TotalPages")]
        [Validation(Required=true)]
        public int? TotalPages { get; set; }

        [NameInMap("CustomLines")]
        [Validation(Required=true)]
        public List<DescribeCustomLinesResponseCustomLines> CustomLines { get; set; }
        public class DescribeCustomLinesResponseCustomLines : TeaModel {
            [NameInMap("Id")]
            [Validation(Required=true)]
            public long Id { get; set; }

            [NameInMap("Name")]
            [Validation(Required=true)]
            public string Name { get; set; }

            [NameInMap("CreateTime")]
            [Validation(Required=true)]
            public string CreateTime { get; set; }

            [NameInMap("CreateTimestamp")]
            [Validation(Required=true)]
            public long CreateTimestamp { get; set; }

            [NameInMap("IpSegments")]
            [Validation(Required=true)]
            public string IpSegments { get; set; }

            [NameInMap("Code")]
            [Validation(Required=true)]
            public string Code { get; set; }

        }

    }

}
