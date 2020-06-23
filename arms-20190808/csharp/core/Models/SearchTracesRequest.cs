// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class SearchTracesRequest : TeaModel {
        [NameInMap("StartTime")]
        [Validation(Required=true)]
        public long StartTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=true)]
        public long EndTime { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ServiceName")]
        [Validation(Required=false)]
        public string ServiceName { get; set; }

        [NameInMap("OperationName")]
        [Validation(Required=false)]
        public string OperationName { get; set; }

        [NameInMap("MinDuration")]
        [Validation(Required=false)]
        public long MinDuration { get; set; }

        [NameInMap("Tag")]
        [Validation(Required=false)]
        public List<SearchTracesRequestTag> Tag { get; set; }
        public class SearchTracesRequestTag : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=false)]
            public string Key { get; set; }

            [NameInMap("Value")]
            [Validation(Required=false)]
            public string Value { get; set; }

        }

        [NameInMap("ServiceIp")]
        [Validation(Required=false)]
        public string ServiceIp { get; set; }

        [NameInMap("ExclusionFilters")]
        [Validation(Required=false)]
        public List<SearchTracesRequestExclusionFilters> ExclusionFilters { get; set; }
        public class SearchTracesRequestExclusionFilters : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=false)]
            public string Key { get; set; }

            [NameInMap("Value")]
            [Validation(Required=false)]
            public string Value { get; set; }

        }

    }

}
