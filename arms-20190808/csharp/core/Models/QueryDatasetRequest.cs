// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class QueryDatasetRequest : TeaModel {
        [NameInMap("DatasetId")]
        [Validation(Required=true)]
        public long DatasetId { get; set; }

        [NameInMap("IntervalInSec")]
        [Validation(Required=true)]
        public int? IntervalInSec { get; set; }

        [NameInMap("DateStr")]
        [Validation(Required=false)]
        public string DateStr { get; set; }

        [NameInMap("MinTime")]
        [Validation(Required=true)]
        public long MinTime { get; set; }

        [NameInMap("MaxTime")]
        [Validation(Required=true)]
        public long MaxTime { get; set; }

        [NameInMap("IsDrillDown")]
        [Validation(Required=false)]
        public bool? IsDrillDown { get; set; }

        [NameInMap("OrderByKey")]
        [Validation(Required=false)]
        public string OrderByKey { get; set; }

        [NameInMap("Limit")]
        [Validation(Required=false)]
        public int? Limit { get; set; }

        [NameInMap("ReduceTail")]
        [Validation(Required=false)]
        public bool? ReduceTail { get; set; }

        [NameInMap("HungryMode")]
        [Validation(Required=false)]
        public bool? HungryMode { get; set; }

        [NameInMap("Measures")]
        [Validation(Required=false)]
        public List<string> Measures { get; set; }

        [NameInMap("Dimensions")]
        [Validation(Required=false)]
        public List<QueryDatasetRequestDimensions> Dimensions { get; set; }
        public class QueryDatasetRequestDimensions : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=false)]
            public string Key { get; set; }

            [NameInMap("Value")]
            [Validation(Required=false)]
            public string Value { get; set; }

            [NameInMap("Type")]
            [Validation(Required=false)]
            public string Type { get; set; }

        }

        [NameInMap("RequiredDims")]
        [Validation(Required=false)]
        public List<QueryDatasetRequestRequiredDims> RequiredDims { get; set; }
        public class QueryDatasetRequestRequiredDims : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=false)]
            public string Key { get; set; }

            [NameInMap("Value")]
            [Validation(Required=false)]
            public string Value { get; set; }

            [NameInMap("Type")]
            [Validation(Required=false)]
            public string Type { get; set; }

        }

        [NameInMap("OptionalDims")]
        [Validation(Required=false)]
        public List<QueryDatasetRequestOptionalDims> OptionalDims { get; set; }
        public class QueryDatasetRequestOptionalDims : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=false)]
            public string Key { get; set; }

            [NameInMap("Value")]
            [Validation(Required=false)]
            public string Value { get; set; }

            [NameInMap("Type")]
            [Validation(Required=false)]
            public string Type { get; set; }

        }

        [NameInMap("ProxyUserId")]
        [Validation(Required=false)]
        public string ProxyUserId { get; set; }

    }

}
