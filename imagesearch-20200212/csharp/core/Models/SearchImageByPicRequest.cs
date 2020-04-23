// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ImageSearch20200212.Models
{
    public class SearchImageByPicRequest : TeaModel {
        [NameInMap("CategoryId")]
        [Validation(Required=false)]
        public int? CategoryId { get; set; }

        [NameInMap("InstanceName")]
        [Validation(Required=true)]
        public string InstanceName { get; set; }

        [NameInMap("PicContent")]
        [Validation(Required=true)]
        public string PicContent { get; set; }

        [NameInMap("Crop")]
        [Validation(Required=false)]
        public bool? Crop { get; set; }

        [NameInMap("Region")]
        [Validation(Required=false)]
        public string Region { get; set; }

        [NameInMap("Num")]
        [Validation(Required=false)]
        public int? Num { get; set; }

        [NameInMap("Start")]
        [Validation(Required=false)]
        public int? Start { get; set; }

        [NameInMap("Filter")]
        [Validation(Required=false)]
        public string Filter { get; set; }

    }

}
