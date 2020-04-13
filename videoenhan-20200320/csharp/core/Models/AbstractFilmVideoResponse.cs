// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Videoenhan20200320.Models
{
    public class AbstractFilmVideoResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public AbstractFilmVideoResponseData Data { get; set; }
        public class AbstractFilmVideoResponseData : TeaModel {
            [NameInMap("VideoUrl")]
            [Validation(Required=true)]
            public string VideoUrl { get; set; }
        };

    }

}
